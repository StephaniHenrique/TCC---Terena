//Cadastro de informações básicas do usuário

import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';

export interface InfoUser {
  codUsers?: string;
  nomeUsers: string;
  nascUsers: string;
  sexoUsers: string;
  cpfUsers: string;
}

@Injectable({
  providedIn: 'root'
})
export class InfoUserService {
  private url = 'http://localhost/auth_app/api/info.php';
 

  constructor(private http: HttpClient) { }

  insertInfo(user: InfoUser){
  return this.http.put(this.url, user);
  }
}

