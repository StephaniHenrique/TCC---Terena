//Puxando as publicações do usuário LOGADO que já foram RESOLVIDAS
//Fazendo a contagem de Publicações e Heróis do usuário LOGADOS

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

export interface StudentProfileDonate {
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
  mes: string;
  dia: string;
  hora: string;
  minuto: string;
  diaDaSemana: string;
}


export interface Casos {
  Casos: string;
  codUsers: string;
}

export interface Hero {
  Hero: string;
  codUsers: string;
}

@Injectable({
  providedIn: 'root'
})

export class PubInativaService {
  private url = 'http://localhost/crud_api/api/';

  constructor(private http: HttpClient) { }

  get(codUsers: string): Observable<StudentProfileDonate[]>{
    return this.http.get<StudentProfileDonate[]>(`${this.url}/studentDonate` + '/' + codUsers);
  }

  getCasos(codUsers: string): Observable<Casos[]>{
    return this.http.get<Casos[]>(`${this.url}/count` + '/' + codUsers);
  }

  getHero(codUsers: string): Observable<Hero[]>{
    return this.http.get<Hero[]>(`${this.url}/countHero` + '/' + codUsers);
  }

}
