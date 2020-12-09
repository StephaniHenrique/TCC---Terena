//Realiza apadrinhamento e puxa usuarios que foram apadrinhados

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

export interface StudentAp {
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
  iconUsers: string;
  iduser: string;
  imgInstituicao: null
  municipioInstituicao: string;
  nivelEscolaridade: string;
  nomeInstituicao: string;
  nomeUsers: string;
  ufInstituicao: string;
  codApadrinhamento: string;
}

export interface apadrinhado {
  codApadrinhado: string;
  codPadrinho: string;
}

@Injectable({
  providedIn: 'root'
})
export class ApadrinhamentoService {
  private url = 'http://localhost/crud_api/api';

  constructor(private http: HttpClient) { }

  pushStudents(codUsers:string): Observable<StudentAp[]>{
    return this.http.get<[StudentAp]>(`${this.url}/apadrinhar` + '/' + codUsers);
  }

  apadrinhar(apadrinhado: apadrinhado) {
    return this.http.post(`${this.url}/apadrinhar.php`, apadrinhado);
  }

  removeApadrinhado(codApadrinhamento){
    return this.http.delete(`${this.url}/apadrinhar` + '/' + codApadrinhamento)    
  }
}
