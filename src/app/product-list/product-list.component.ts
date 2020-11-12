import { Component, OnInit, Output,EventEmitter } from '@angular/core';
import { ApiService } from '../api.service';


@Component({
  selector: 'app-product-list',
  templateUrl: './product-list.component.html',
  styleUrls: ['./product-list.component.css']
})
export class ProductListComponent implements OnInit {
  @Output() seeListData = new EventEmitter();
  products:{}= [
  ]

  constructor(private apiService: ApiService) { }

  ngOnInit(): void {
    this.apiService.getProducts().subscribe((res)=>{
      console.log(res)
      this.products=res
     })

  }
  
  seeList(data){
    this.seeListData.emit(data)
  }

}
