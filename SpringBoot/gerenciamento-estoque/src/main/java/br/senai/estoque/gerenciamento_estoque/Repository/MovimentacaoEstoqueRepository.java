package br.senai.estoque.gerenciamento_estoque.Repository;



import org.springframework.data.jpa.repository.JpaRepository;

public interface MovimentacaoEstoqueRepository extends JpaRepository<br.senai.estoque.gerenciamento_estoque.Model.MovimentacaoEstoque, Long> {
}
