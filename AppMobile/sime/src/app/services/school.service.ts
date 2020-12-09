//Cadastrando informações da escola do usuário que é estudante

import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

export interface SchoolInformation{
  codEscolaridade?: string;
  serieEscolaridade: string;
  anofimEscolaridade: string;
  instituicaoEscolaridade: string;
  codInstituicaoEscolaridade: string;
  nivelEscolaridade: String;
  identificarEscolaridade: string;
}

@Injectable({
  providedIn: 'root'
})
export class SchoolService {
  private url = 'http://localhost/auth_app/api/info3.php';

  constructor(private http: HttpClient) { }

  insertSchool(school: SchoolInformation) {
    return this.http.put(this.url, school);
  }
}
