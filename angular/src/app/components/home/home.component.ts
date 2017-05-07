import{ Component } from '@angular/core';
import {RopaService} from '../../services/ropa.service'

@Component({
	selector:'home',
	templateUrl:'./home.component.html',
	styleUrls: ['./home.component.css'],
	providers: [RopaService]
})


export class HomeComponent {
	public titulo = "Pagina Principal";
	public listado:Array<string> ;
	public prenda_guardar:string;
	public fecha;

	constructor(
		private _ropaService: RopaService
	){
		this.fecha = new Date(2017,4,15);
	}

	ngOnInit(){
		this.listado = this._ropaService.getRopa();
	}
	guardar_prenda(){
		this._ropaService.addRopa(this.prenda_guardar);
		this.prenda_guardar = null;
	}
	eliminarPrenda(index:number){
		this._ropaService.deleteRopa(index);
	}
	
}