import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private httpClient: HttpClient) { }

  public getProducts(){
    return this.httpClient.get(`http://localhost/php-productlist/php/api/products/read`);
   }
  public getSingleProducts(id){
    return this.httpClient.get(`http://localhost/php-productlist/php/api/products/read_single?id=${id}`);
  }
  public deleteComments(id: number){
    return this.httpClient.get(`http://localhost/php-productlist/php/api/comments/delete.php?id=${id}`);
  }
    public createComments(data){
      return this.httpClient.post(`http://localhost/php-productlist/php/api/comments/create`, data);

      
}
}