//Puxando informações de perfis de outros usuários(usuários não logados).

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

export interface OtherStudent {
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
export class OtherUsersService {

  private url = 'http://localhost/crud_api/api';

  constructor(private http: HttpClient) { }

  infoUserGet(codUsers: string){
    return this.http.get<[OtherStudent]>(`${this.url}/perfilUser` + '/' +codUsers);
  }

}
