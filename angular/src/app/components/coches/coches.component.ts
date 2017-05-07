import { Component } from '@angular/core';
import { Coche } from './coche';
import { PeticionesService } from '../../services/peticiones.service';

@Component({
	selector: 'coches',
	templateUrl: 'coches.component.html',
	providers:[PeticionesService]
})

export class CochesComponent{
	public titulo = 'Coches';
	public coche:Coche;
	public listadoCoches:Array<Coche>;
	public articulos;


	constructor(
		private _peticionesService : PeticionesService
	){
		this.coche = new Coche('','','');
		this.listadoCoches = [
			new Coche('renault','150','gris Commet')
		];
	}
	ngOnInit(){
		this._peticionesService.getArticulos().subscribe(
			result => {
				this.articulos = result;
				if (!this.articulos) {
					console.log('error en el servidor');
					// code...
				}
			},

			error => {
				var err = <any>error;
				console.log(err);
			}
		);
	}
	onSubmit(){
		this.listadoCoches.push(this.coche);
		this.coche = new Coche('','','');
	}
}