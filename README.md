<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Crear proyecto
<p>composer create-project laravel/laravel productos</p>

Configurar base de datos fichero .env

Creamos una migracion
<p>php artisan make:migration create_products_table</p>

Ejecutamos la migracion
php artisan migrate


Incluimos campos nuevos
public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('price');
            $table->timestamps();
        });
    }

Creamos un modelo
php artisan make:model Product
