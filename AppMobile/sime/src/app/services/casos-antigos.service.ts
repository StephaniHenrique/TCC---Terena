//Puxar publicações mais antigas para home

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

export class CasosAntigosService {
  private url = 'http://localhost/crud_api/api/casosAntigos';

  constructor(private http: HttpClient) { }

  getCasosAntigos(codUsers: string): Observable<Student[]>{
    return this.http.get<[Student]>(this.url + '/' + codUsers);
  }

}
