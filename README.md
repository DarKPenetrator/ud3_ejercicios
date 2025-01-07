# Unidad 3 Ejercicios

<br>

## Ejercicio 4


- ¿Qué hace el método create? Define la estructura de una tabla en la base de datos.


- ¿Qué hace $table->string('email')->primary();? Crea un campo email de tipo string y lo establece como clave primaria.


- Número de tablas definidas: 3

    0001_01_01_000002_create_jobs_table.php

    0001_01_01_000001_create_cache_table.php

    0001_01_01_000000_create_users_table.php


<br>

## Ejercicio 5


- ¿Cuántas tablas aparecen? 9

    cache                 ,cache_locks           ,failed_jobs           ,job_batches           ,jobs                  ,migrations            ,password_reset_tokens ,sessions              ,users                 

<br>

## Ejercicio 6

- php artisan migrate =	Ejecuta las migraciones pendientes y actualiza la base de datos.

- php artisan migrate:status =	Muestra el estado de todas las migraciones (si están ejecutadas o pendientes).

- php artisan migrate:rollback =	Revierte la última migración o conjunto de migraciones ejecutadas.

- php artisan migrate:reset =	Revierte todas las migraciones ejecutadas, eliminando todas las tablas creadas.

- php artisan migrate:refresh =	Revierte y vuelve a ejecutar todas las migraciones desde cero.

- php artisan make:migration =	Crea un archivo de migración en el directorio database/migrations.

- php artisan migrate --seed =	Ejecuta las migraciones pendientes y luego ejecuta los seeders para insertar datos en las tablas.


<br>

## Ejercicio 8

Se deberia añadir el siguiente codigo en el archivo de migration 
```bash
Schema::table('alumnos', function (Blueprint $table) {
    $table->string('apellido');
});
```
<br>

## Ejercicio 9


![image](https://github.com/user-attachments/assets/e1b79139-400a-4482-8cb6-48cae5f77623)

<br>


