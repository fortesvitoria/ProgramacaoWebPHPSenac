
CREATE TABLE `plantas` (
  `id` int(11) NOT NULL,
  `ambiente` varchar(30) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `especie` varchar(260) NOT NULL,
  `origem` varchar(200) NOT NULL,
  `regar` varchar(200) NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `plantas` (`id`, `ambiente`, `nome`, `especie`, `origem`, `regar`, `imagem`) VALUES
(1, 'Sombra', 'Antúrio', 'Anthurium andraeanum', 'Colômbia', '2 vezes na semana', 'https://cdn.awsli.com.br/2823/2823816/produto/357421216/designsemnome_33-9yzei59nz3.png'),
(2, 'Sombra', 'Zamioculca', 'Zamioculcas zamiifolia', 'África Ocidental', '1 vez na semana', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ804bBuCqj9xPhQ_X5HUN3E1rB-hj6ZIVPAg&s'),
(3, 'Sol pleno', 'Lantana', 'Lantana camara', 'América tropical', '1 a 2 vezes na semana', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Qbgyv9rP6jjr5QDXWkVppd6htdpEJhk6dw&s'),
(4, 'Meia-sombra', 'Violeta', 'Saintpaulia ionantha', 'Tanzania e Africa oriental', '1 a 2 vezes na semana', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG_vCT4mvgDB6LcFROv3TolEEUiaxmXrZDiA&s'),
(5, 'Meia-sombra', 'Azaleia', 'Rhododendron simsii', 'Ásia, principalmente China e Japão', '2 a 3 vezes na semana', 'https://vasoeflor.cdn.magazord.com.br/img/2023/10/produto/1946/azaleia1.jpg?ims=fit-in/800x800/filters:fill(white)'),
(6, 'Meia-sombra', 'Pacová', 'Philodendron martianum', 'Brasil', '1 vez na semana', 'https://superuniversodasplantas.com.br/wp-content/uploads/2023/07/c3c7102676c5294958776342741e9e7e.jpg');
