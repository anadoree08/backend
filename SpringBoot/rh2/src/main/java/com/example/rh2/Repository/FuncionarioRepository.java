package com.example.rh2.Repository;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;

import com.example.rh2.Model.Funcionario;

public interface FuncionarioRepository extends CrudRepository<Funcionario, Long> {
    //permitir a urilização dos métodos do crud do JPA

    // métodos auxiliares

    Funcionario findById(long id); // buscar um funcionário pelo id

    Funcionario findByNome(String nome); // buscar funcionários pelo nome 

    @Query(value = "select u from Funcionario u where u nome u.nome like %?1%")
    List<Funcionario> findByLetras(String letras);




}