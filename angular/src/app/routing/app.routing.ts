import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

//importar componentes

import { LoginComponent } from '../components/login/login.component';
import { RegistroComponent } from '../components/registro/registro.component';
import { HomeComponent } from '../components/home/home.component';
import { ContactoComponent } from '../components/contacto/contacto.component';
import { CochesComponent } from '../components/coches/coches.component';


const appRoutes : Routes = [
	{ path: '' , component : HomeComponent },
	{ path: 'login' , component : LoginComponent },
	{ path: 'registro' , component : RegistroComponent },
	{ path: 'contacto' , component : ContactoComponent },
	{ path: 'contacto/:page' , component : ContactoComponent },
	{ path: 'coches' , component : CochesComponent },
	{ path: '**' , component : HomeComponent }

];

export const appRoutingProviders: any [] = [];
export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);

