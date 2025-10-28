import { Routes } from '@angular/router';
import { Empleados } from './empleados/empleados';

export const routes: Routes = [

    {
        path:'',
        component: Empleados,
        children:[
            {
                path:'',
                loadComponent:()=>
                    import('./empleados/empleados').then(m=>m.Empleados)
                
            }
        ]
        
    }

];


