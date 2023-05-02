<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Orientation et Apprentissage
    </title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{asset('js/app.js')}}"></script>

</head>

<!-- Navbar -->

<body class=" selection:bg-brand-black selection:text-white">


    <x-navbar />
    <div class="  mx-auto max-w-6xl px-4 lg:px-8 mt-8">
        <div class="max-w-2xl mx-auto pt-4 lg:pt-12">

            <h1 class="text-5xl font-bold text-center">
                A propos
            </h1>
            <h2 class="uppercase py-2 text-center  text-2xl font-bold text-brand-gray">
                Qui sommes-nous ?
            </h2>
            <div class="prose prose-lg leading-1 tracking-wide text-lg mx-auto prose-black mt-6 text-gray-700">
                <h3 class="px-4">
                    Il était une fois une maman désemparée…
                </h3>
                <p>
                    Faisant le bilan des résultats scolaires partiels, un élève nous approche et nous fait savoir qu’il
                    a volontairement obtenu de mauvais résultats afin d’attirer l’attention de sa mère et lui faire
                    comprendre qu&apos;elle ne devrait pas vivre son rêve à travers lui.
                    Il nous demande de l’aider à se réorienter afin de réaliser son rêve à travers ses études.
                    Nos actions ont permis à la mère et son fils de se réconcilier et de l’aider à réussir sa
                    réorientation. Il a pu ainsi réaliser son rêve et est devenu un avocat.
                    Nous décidons alors de nous engager à accompagner les élèves dans leur orientation car cela
                    contribue à l’équilibre social et à l’épanouissement de l’individu.

                </p>


                <h3 class="px-4">
                    Un cadre financier devenu professionnel des services à la personne…
                </h3>
                <p>
                    Devenu cadre financier sans vraiment l’avoir voulu, ce cadre travaille à la pérennisation de son
                    entreprise qui est en proie à une crise sans précédent. Ses préoccupations et ses activités
                    professionnelles finissent par avoir une incidence fâcheuse sur sa santé.
                    Ce cadre se tourne alors vers nous pour un accompagnement et une réorientation professionnelle. Il
                    apprend alors un métier qu’il exerce actuellement et auquel il a toujours été attaché, celui d’être
                    au service des personnes vulnérables.
                    Le voyant épanoui et heureux de notre accompagnement, notre conviction d’offrir l’opportunité d’une
                    réorientation professionnelle à tous ceux qui le désirent est renforcée.
                </p>

                <h2>
                    Pourquoi nous ?
                </h2>
                <p>
                    Issus de divers milieux professionnels et ayant obtenu des compétences, des expériences
                    professionnelles différentes, nous partageons des valeurs communes.
                    Notre engagement à servir les jeunes et les professionnels nous a conduits à proposer
                    orientation.apprentissage.net.
                    Convaincus de la nécessité d’aborder le conseil en orientation scolaire, en réorientation
                    professionnelle et en appui à la scolarisation des enfants ayant des difficultés d’apprentissage
                    sous le triptyque personnalisation-bienveillance-pertinence, nous avons choisi de miser sur
                    l’humain.
                    C’est ce qui nous conduit à proposer une approche innovante de l'orientation scolaire et
                    professionnelle autour de 4 points pour permettre aux jeunes collégiens, lycéens, étudiants et
                    professionnels de faire le bon choix d’orientation ou de réorientation au bon moment.
                    Ces points s’articulent autour des axes suivants :

                <ul class="">
                    <li>
                        Une offre proposée par des professionnels de l’éducation, des ressources humaines, des services
                        à la personne et des psychologues
                        Cet ancrage dans le milieu scolaire et professionnel, tout en restant centré sur leur
                        personnalité, leurs capacités, leurs résultats et leur "projet de vie", permet d'accompagner les
                        jeunes au plus près de leur problématique d'orientation scolaire et professionnelle, et de les
                        conseiller pour choisir le métier qui leur conviendra le mieux.
                    </li>
                    <li>
                        Une approche innovante de l’orientation scolaire et professionnelle
                        L'intervention conjointe et complémentaire de ces profils professionnels garantit un choix
                        d'orientation juste, réfléchi et en complète adéquation avec la personnalité profonde de votre
                        enfant, lui donnant ainsi toutes les chances d'envisager une vie professionnelle épanouissante.
                    </li>
                    <li>
                        Un choix rigoureux des intervenants, des méthodes et des outils
                        Nos experts possèdent une expérience professionnelle réussie et sont choisis selon des critères
                        rigoureux, et dans le respect de valeurs communes.
                    </li>
                </ul>
                </p>


                <p>
                    Cette exigence permet à orientation.apprentissage.com de proposer un service le plus irréprochable
                    possible, basé sur les compétences techniques et les qualités personnelles des intervenants : vision
                    globale, intelligence de situation, sérieux, ouverture d’esprit, capacité d’adaptation, sens des
                    responsabilités mais aussi bienveillance et amabilité.

                </p>

                <p>
                    Outre les compétences de nos intervenants, notre méthode d'accompagnement transversale et
                    pluridisciplinaire s'appuie aussi sur des questionnaires très complets et des tests d’orientation
                    référents.

                </p>

                <p>
                    En définitive, nos offres sont les suivantes :

                <ul class="">
                    <li>
                        Des tests d’orientation scolaire
                    </li>

                    <li>
                        Des tests de réorientation professionnelle
                    </li>

                    <li>
                        Des tests de profils d’apprentissage (identité, motivation, compréhension…)
                    </li>

                    <li>
                        Des tests et outils de coaching scolaire
                    </li>

                    <li>
                        Des tests d’intelligence
                    </li>
                    <li>
                        Des outils et équipements pour une meilleure prise en charge des enfants autistes, trisomiques,
                        avec DYS, TDAH …
                    </li>
                </ul>
                </p>
                <p>
                    Avec <a href="/">orientation.apprentissage.net</a>, construisons une civilisation de l’amour.
                </p>

            </div>

            <div class="my-16 flex flex-col items-center justify-center gap-4 text-xl lg:text-2xl font-bold">
                Vous avez des questions ?
                <a href="/contact"
                    class="bg-white border-2 text-lg md:text-xl hover:scale-105 duration-150 transition-transform z-10 inline-flex  border-brand-black rounded-3xl p-1.5 md:p-2 ">
                    Contactez-nous
                </a>
            </div>
        </div>

    </div>
    <x-footer />

</body>