package br.senai.estoque.gerenciamento_estoque.Repository;



import java.util.Optional;
import org.springframework.data.jpa.repository.JpaRepository;
//import br.senai.estoque.gerenciamentoestoque.model.Funcionario;

public interface FuncionarioRepository extends JpaRepository<br.senai.estoque.gerenciamento_estoque.Model.Funcionario, Long> {

    Optional<br.senai.estoque.gerenciamento_estoque.Model.Funcionario> findByNif(String nif);

    boolean existsByNif(String nif);

}
