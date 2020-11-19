import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private httpClient: HttpClient) { }

  public getProducts(){
    return this.httpClient.get(`http://www.wiu.edu/users/pvskc100/productlist/php/api/products/read.php`);
   }
  public getSingleProducts(id){
    return this.httpClient.get(`http://www.wiu.edu/users/pvskc100/productlist/php/api/products/read_single.php?id=${id}`);
  }
  public deleteComments(id: number){
    return this.httpClient.get(`http://www.wiu.edu/users/pvskc100/productlist/php/api/comments/delete.php?id=${id}`);
  }
    public createComments(data){
    return this.httpClient.post(`http://www.wiu.edu/users/pvskc100/productlist/php/api/comments/create.php`, data, {
      headers: {
        'Access-control-allow-origin': '*',
      'Access-control-allow-methods':'POST',
      'Content-type':'application/json'
        }
});

      
}
}