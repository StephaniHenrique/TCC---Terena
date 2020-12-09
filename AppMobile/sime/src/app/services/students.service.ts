//CRUD publicaçãos

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

export interface Student {
  bairroInstituicao: string;
  cepInstituicao: string;
  cidadeInstituicao: string;
  codEscolaridade: string;
  codInstituicao: string;
  codInstituicaoEscolaridade: string;
  codPublicacao: string;
  codPublicacaoUsuario: string;
  codUsers: string;
  codUsuario: string;
  coddaInstituicao: string;
  complementoInstituicao: string;
  descricaoPublicacao: string;
  fotoPublicacao: string;
  iconUsers: string;
  iduser: string;
  imgInstituicao: null
  municipioInstituicao: string;
  nivelEscolaridade: string;
  nomeInstituicao: string;
  nomeUsers: string;
  tituloPublicacao: string;
  ufInstituicao: string;
}

@Injectable({
  providedIn: 'root'
})
export class StudentsService {
  private url = 'http://localhost/crud_api/api';

  constructor(private http: HttpClient) { }

  getAll(codUsers: string): Observable<Student[]>{
     return this.http.get<[Student]>(`${this.url}/pubs` + '/' + codUsers);
  }

  get(codPublicacaoUsuario: string){
    return this.http.get<Student>(`${this.url}/students` + '/' + codPublicacaoUsuario);
  }

  create(student: Student){
    return this.http.post(`${this.url}/students`, student);
  }

  update(student: Student, codPublicacaoUsuario: string){
    return this.http.put(`${this.url}/students` + '/' + codPublicacaoUsuario, student);
  }

  remove(codPublicacaoUsuario: string){
    return this.http.delete(`${this.url}/students` + '/' + codPublicacaoUsuario);
  }

}
