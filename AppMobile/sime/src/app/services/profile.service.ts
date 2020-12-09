//Puxando publicações do usuário LOGADO
//Puxando publicações de ID especifico

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

export interface StudentProfile {
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

@Injectable({
  providedIn: 'root'
})
export class ProfileService {
  private url = 'http://localhost/crud_api/api/student';

  constructor(private http: HttpClient) { }

  get(codUsers: string): Observable<StudentProfile[]>{
    return this.http.get<StudentProfile[]>(this.url + '/' + codUsers);
  }
}


