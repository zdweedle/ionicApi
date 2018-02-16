import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { ContaInterface } from '../../interfaces/containterface';
import { WebserviceProvider } from '../../providers/webservice/webservice';

/**
 * Generated class for the LoginPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class LoginPage {

  public conta: ContaInterface = {email:'',senha:''}
  constructor(public navCtrl: NavController, public navParams: NavParams,public webservice: WebserviceProvider) {
  }
   addConta(){
   console.log(this.conta);
   this.webservice.addConta(this.conta).then(data=> console.log(data));

   }
  ionViewDidLoad() {
    console.log('ionViewDidLoad LoginPage');
  }

}
