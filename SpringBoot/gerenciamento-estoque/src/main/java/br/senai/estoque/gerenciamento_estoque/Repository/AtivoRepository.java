package br.senai.estoque.gerenciamento_estoque.Repository;


import org.springframework.data.jpa.repository.JpaRepository;
//import br.senai.estoque.gerenciamentoestoque.model.AtivoPatrimonial;

public interface AtivoRepository extends JpaRepository<br.senai.estoque.gerenciamento_estoque.Model.AtivoPatrimonial, Long> {
}
