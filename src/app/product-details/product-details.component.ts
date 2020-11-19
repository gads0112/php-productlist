import { Component, Input, OnInit } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-product-details',
  templateUrl: './product-details.component.html',
  styleUrls: ['./product-details.component.css']
})
export class ProductDetailsComponent implements OnInit {
  @Input() productId: string;
  constructor(private apiService: ApiService) { }
  data = {}
  text=""
  products= {
    
   }
  ngOnInit(): void {
    this.apiService.getSingleProducts(this.productId).subscribe((res)=>{
      console.log(res)
      this.data=res
     })
    
  }

  submit(){
    if(this.text)
    {
      
let data ={
product_id : Number(this.productId),
product_comments:this.text
}
      this.apiService.createComments(data).subscribe((res)=>{
        if(res){
          this.text=""
          this.apiService.getSingleProducts(this.productId).subscribe((res)=>{
            console.log(res)
            this.data=res
           })
        }
        console.log(res)
        this.data=res
       })
    }

  }
  delete(id){

      this.apiService.deleteComments(id).subscribe((res)=>{
       
          console.log(res)
          this.apiService.getSingleProducts(this.productId).subscribe((res)=>{
            console.log(res)
            this.data=res
           })
        
       })
    

  }
  
}
