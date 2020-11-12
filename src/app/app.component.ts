import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  home = true;
  title = 'new-app';
  productId = '';
  productName = '';
  homeFun(){
    this.home = true;
  }
  productDetails( data){
    this.productId = data.id
    this.productName = data.title
    this.home = false;
  }
}
