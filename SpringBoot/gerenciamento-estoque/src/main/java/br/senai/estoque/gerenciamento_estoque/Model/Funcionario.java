package br.senai.estoque.gerenciamento_estoque.Model;

import jakarta.persistence.*;

@Entity
@Table(name = "funcionarios")
public class Funcionario {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String nome;

    @Column(unique = true)
    private String nif;

    private String senha;

    private boolean ativo = true;

    public Long getId() { return id; }

    public void setId(Long id) { this.id = id; }

    public String getNome() { return nome; }

    public void setNome(String nome) { this.nome = nome; }

    public String getNif() { return nif; }

    public void setNif(String nif) { this.nif = nif; }

    public String getSenha() { return senha; }

    public void setSenha(String senha) { this.senha = senha; }

    public boolean isAtivo() { return ativo; }

    public void setAtivo(boolean ativo) { this.ativo = ativo; }
}