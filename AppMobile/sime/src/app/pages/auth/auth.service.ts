//Fazendo cadastro de e-mail e senha
//Realizando Login

import { User } from './user.model';
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private url = 'http://localhost/auth_app/api';
  constructor(private http: HttpClient) { }

  register(user: User) {
    return this.http.post(`${this.url}/register.php`, user);
  }

  login(credentials: User): Observable<any> {
    return this.http.post(`${this.url}/login.php`, credentials);
  }

}
