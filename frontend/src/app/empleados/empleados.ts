import { Component } from '@angular/core';
import { Empleadoservice } from '../core/services/empleadoservice';

@Component({
  selector: 'app-empleados',
  imports: [],
  templateUrl: './empleados.html',
  styleUrl: './empleados.scss',
})
export class Empleados {

  empleados: any[] = [];
  constructor(private empleaadoService:Empleadoservice){
    this.listarEmpleados();
  }

  listarEmpleados():void{
    this.empleaadoService.listarEmpleados().subscribe({
      next:(data)=>{
        this.empleados=data
        console.log(this.empleados);
      },
      error:(err)=>console.error('Error al cargar',err)
      
    })
  }

}
