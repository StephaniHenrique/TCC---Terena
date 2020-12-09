import {HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map } from 'rxjs/operators';


@Injectable({
  providedIn: 'root'
})
export class ServidorService {

  url: string = "http://localhost/search/";

  constructor(
    public http: HttpClient
  ) { }

  getPegar(){
    return this.http.get(this.url+'dados.php').pipe(map((res: Response) => res.json()));
  }
}
