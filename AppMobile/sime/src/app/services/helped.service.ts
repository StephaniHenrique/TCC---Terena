//Para visualizar estudantes que o usuario ajudou com uma doação

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

export interface StudentHappy {
  codPublicacao: string;
  codPublicacaoUsuario: string;
  codUsers: string;
  codUsuario: string;
  iconUsers: string;
  iduser: string;
  nomeUsers: string;
}

export interface rastreio {
  rastrearDoacao: string;
}

@Injectable({
  providedIn: 'root'
})
export class HelpedService {
  private url = 'http://localhost/crud_api/api';

  constructor(private http: HttpClient) { }

  get(codUsers: string): Observable<StudentHappy[]>{
    return this.http.get<StudentHappy[]>(`${this.url}/teste` + '/' + codUsers);
  }

  post(rastreio: rastreio){
    return this.http.post(`${this.url}/doando.php`, rastreio);
  }
}

