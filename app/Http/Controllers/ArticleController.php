<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Article;
use App\Models\Statutarticle;
use App\Models\Categoryarticle;
use App\Models\Commentaire;
use DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statut = Statutarticle::All();
        $Categoryarticle=Categoryarticle::All();         
        return view('Auteur.Add',compact('statut','Categoryarticle'));
    }

    public function index2()
    {
       $Articles=DB::table('articles')
       ->select('articles.*', 'categoryarticles.LibelleCategoryArticle')
       ->join('categoryarticles', 'articles.CategoryArticleId', '=', 'categoryarticles.id')
       ->where('articles.StatutArticleId', 1)
       ->get();
       $Categoryarticle=Categoryarticle::All();  
    return view('index',compact('Articles','Categoryarticle'));
    }


    public function All()
    {
        $Articles=Article::whereIn('StatutArticleId',[1,2])->paginate(10000);
        return view('Auteur.All',compact('Articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('Image')) {
             $name=$request->Image->getClientOriginalName();
            $request->Image->move(base_path('public/fichier/img/'),$name);
         }
        $article = new Article();
        $article->Titre = $request->input('Titre');
        $article->Text = $request->input('Text');
        $article->Description = $request->input('Description');
        $article->Image =$name;
        $article->CategoryArticleId =$request->input('categorie');
        $article->StatutArticleId = $request->input('status');
        $article->auteur = Auth::user()->name;
        //$article->slug = str_slug($article->Titre, '-');
        $article->slug =$article->Titre . '-' . $article->auteur;
        $article->save();
        return redirect()->back()->with('alert','L\'article a bien été enregistré');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $Articles = Article::where('slug', $slug)->firstOrFail();
        //$commentaire= commentaire::all();
        
        $commentaire=DB::table('commentaires')
        ->select('commentaires.*', 'users.name')
        ->join('users', 'commentaires.user_id', '=', 'users.id')
        ->join('articles', 'commentaires.article_id', '=', 'articles.id')
        ->where('commentaires.actif', 0)
        ->where('commentaires.article_id',$Articles->Id)
        ->get(); 
        
        
        return view('Auteur.Lecture',compact('Articles','commentaire'));
    }

    //ajouter un commentaire
    public function commentaire(Request $request)
    {
         
        $commentaire = new commentaire();
        $commentaire->commentaire = $request->input('commentaire');
        $commentaire->article_id = $request->input('article');
        $commentaire->user_id = Auth::user()->id;
        $commentaire->save();
        return redirect()->back()->with('alert','L\'article a bien été enregistré');
        
    }

    
    //fin ajout commentaire

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Articles = Article::find($id);
        $statut = Statutarticle::All();
        $Categoryarticle=Categoryarticle::All();       
        return view('Auteur.edit',compact('Articles','statut','Categoryarticle'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Articles = Article::find($id); 
       
        if ($request->hasFile('Image')) {
           $name=$request->Image->getClientOriginalName();
           $request->Image->move(base_path('public/fichier/img/'),$name);
           $Articles->Image =$name;
        } 
        
       $Articles->Titre = $request->Titre;
       $Articles->Text = $request->input('Text');
       $Articles->Description = $request->input('Description');
       $Articles->CategoryArticleId = 1;
       $Articles->StatutArticleId = $request->input('status'); 
       $Articles->auteur = Auth::user()->name;
       $Articles->slug = $Articles->Titre . '-' . $Articles->auteur;
       $Articles->save();
       //return redirect()->back()->with('alert','L\'article a bien été modifier');
       return redirect()->route('dashboard')->with('success','Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
