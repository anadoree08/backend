package br.senai.estoque.gerenciamento_estoque.Repository;

import java.util.Optional;
import org.springframework.data.jpa.repository.JpaRepository;
import br.senai.estoque.gerenciamento_estoque.Model.FuncionarioAutenticado;

public interface FuncionarioAutenticadoRepository extends JpaRepository<FuncionarioAutenticado, Long> {

    Optional<FuncionarioAutenticado> findByEmail(String email);

    boolean existsByEmailAndNome(String email, String nome);

}