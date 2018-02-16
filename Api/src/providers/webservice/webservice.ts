import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Headers } from '@angular/http';
import { ContaInterface } from '../interfaces/containterface';

/*
  Generated class for the WebserviceProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class WebserviceProvider {

	private url:string = 'http://luska.herokuapp.com/';
	private headers = new Headers({'Accept':'application/json'})

  constructor(public http: HttpClient) {
    console.log('Hello WebserviceProvider Provider');
  }
  addConta(conta: ContaInterface){
    return this.http.post(this.url+'api/login',conta,{headers:this.headers})
    .toPromise()
    .then(res => res.json());
  }

}
