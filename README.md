## MYBLOG

### installation

```bash

php artisan migrate
npm install
npm run dev
php artisan serve --port=8000

```

### Un blog utilisant laravel breeze

pour utiliser tailwind css sur une page il faut utiliser ce code :

```html
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<script defer src="{{asset('js/app.js')}}"></script>
```
