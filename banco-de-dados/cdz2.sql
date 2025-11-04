CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(260) NOT NULL,
  `email` varchar(180) NOT NULL,
  `senha` varchar(260) NOT NULL,
  `obs` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `obs`, `data`) VALUES
(1, 'Vitor', 'vitor@email.com', 'teste', '--Sem Observações--', '2025-10-03'),
(2, 'Fernando', 'vitor@email.com', 'teste', '--Sem Observações--', '2025-10-03'),
(3, 'Eduardo', 'edu@email.com', 'admin123', 'Inscrito após o início das aulas', '2025-09-05'),
(5, 'Robert', 'ro@email.com', 'teste123', '--Sem Observações--', '2025-10-03'),
(7, 'Ursula', 'ursula@email.com', 'admin', '', '2025-10-03'),
(8, 'Leandra', 'le@email.com', 'teste', '', '2025-10-10'),
(9, 'Carlos', 'ca@email.com', '2e6f9b0d5885b6010f9167787445617f553a735f', '', '2025-10-10');