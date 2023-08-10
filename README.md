# Tienda Simple
## Objetivos a cumplir
- ✅ Crear un repositorio en GitHub.
- ✅ Crear un proyecto en GitHub: **Tienda Simple**.
  - ✅ Usuarios: Registrar, editar y listar usuarios.
  - ✅ Ventas: productos, ventas y detalle de ventas.
    - [] Crear una venta.
    - ✅ Listar ventas.
    - [] Opcional: Modal al darle click a una venta para ver el detalle.
- ✅ Framework: Laravel
  - ✅ Opconal: Usar TailwindCSS.
- ✅ README: Pasos de instalación.


## Pasos de instalación
1. Clonar el repositorio `https://github.com/ypnqh/tienda-simple.git
2. Instalar dependencias con composer: `composer install`.
4. Generar la key de la aplicación: `php artisan key:generate`.
### Crear base de datos
1. Crear base de datos con el nombre `tienda_simple`.
### Migraciones
1. `php artisan migrate`
### Levantar el servidor
1. `php artisan serve --no-reload`
2. `npm run dev`