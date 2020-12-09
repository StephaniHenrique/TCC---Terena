//Para favoritar e visualizar publicações favoritadas pelo usuário

import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

export interface StudentFavorite {
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

export interface favorite {
  codUser: string;
  codPublicacao: string;
}

@Injectable({
  providedIn: 'root'
})
export class FavoritesService {
  private url = 'http://localhost/crud_api/api';

  constructor(private http: HttpClient) { }

  getAll(codUsers: string): Observable<StudentFavorite[]> {
    return this.http.get<[StudentFavorite]>(`${this.url}/seeFavorite` + '/' + codUsers);
  }

  favorite(favorite: favorite) {
    return this.http.post(`${this.url}/favoritar.php`, favorite);

  }

  disfavor(codPublicacao: string) {
    return this.http.delete(`${this.url}/favorite` + '/' + codPublicacao);
   

  }
}


