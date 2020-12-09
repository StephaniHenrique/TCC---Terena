//Permitindo que o usuário selecione um icone de herói para seu perfil

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

export interface StudentPush{
  iconUsers: string;
}

@Injectable({
  providedIn: 'root'
})
export class PushStudentService {
  private url = 'http://localhost/auth_app/api/photo.php';

  constructor( private http: HttpClient) { }

  get(){
    return this.http.get<[StudentPush]>(this.url);
  }

  insertPhoto(user: StudentPush){
    return this.http.put(this.url, user);
    }

}
