# Backend Laravel - Sistema de Empleados

**Nombre:** Fabio Melgarejo Cardozo

## 5. feat(api): ejecutar migraciones y seeders BD creada y probada

- Migración: create_empleados_table ✅
- Seeder: EmpleadoSeeder con 12 registros ✅

- Migración de empleados ejecutada exitosamente
- 12 registros insertados via Seeder
- BD verificada y lista para producción
- Estructura validada con pruebas

----------------------------------------------------------------------------------------

## 7. docs: agregar guía de ejecución del backend

### Instalación
1. `Realizar un git clone`
2. `Realizar composer install`
3. Configurar base de datos en .env

### Ejecución
- Migraciones: `php artisan migrate`  
- Seeders: `php artisan db:seed --class=EmpleadoSeeder`
- Servidor: `php artisan serve`

### API Endpoints
- GET `/api/empleados` - Listar empleados
- POST `/api/empleados` - Crear empleado