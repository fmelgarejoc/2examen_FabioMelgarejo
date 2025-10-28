import { Component } from '@angular/core';
import { Empleadoservice } from '../core/services/empleadoservice';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms'; // Importa FormsModule

@Component({
  selector: 'app-empleados',
  imports: [CommonModule, FormsModule], // Agrega FormsModule aquí
  templateUrl: './empleados.html',
  styleUrl: './empleados.scss',
})
export class Empleados {

  empleados: any[] = [];
  
  // Objeto para el nuevo empleado
  nuevoEmpleado: any = {
    nombre: '',
    apellido: '',
    correo: '',
    salario: ''
  };

  // Variable para mostrar/ocultar formulario
  mostrarFormulario: boolean = false;

  constructor(private empleadoService: Empleadoservice) {
    this.listarEmpleados();
  }

  listarEmpleados(): void {
    this.empleadoService.listarEmpleados().subscribe({
      next: (data) => {
        this.empleados = data;
        console.log(this.empleados);
      },
      error: (err) => console.error('Error al cargar', err)
    });
  }

  agregarEmpleado(): void {
    // Validación básica
    if (!this.nuevoEmpleado.nombre || !this.nuevoEmpleado.correo) {
      alert('Nombre y correo son obligatorios');
      return;
    }

    this.empleadoService.agregarEmpleado(this.nuevoEmpleado).subscribe({
      next: (empleadoCreado) => {
        // Agregar el nuevo empleado a la lista
        this.empleados.push(empleadoCreado);
        
        // Limpiar el formulario
        this.nuevoEmpleado = {
          nombre: '',
          apellido: '',
          correo: '',
          salario: ''
        };
        
        // Ocultar formulario
        this.mostrarFormulario = false;
        
        console.log('Empleado agregado:', empleadoCreado);
      },
      error: (err) => {
        console.error('Error al agregar empleado', err);
        alert('Error al agregar empleado: ' + err.message);
      }
    });
  }

  toggleFormulario(): void {
    this.mostrarFormulario = !this.mostrarFormulario;
  }

  cancelarAgregar(): void {
    this.mostrarFormulario = false;
    this.nuevoEmpleado = {
      nombre: '',
      apellido: '',
      correo: '',
      salario: ''
    };
  }
}