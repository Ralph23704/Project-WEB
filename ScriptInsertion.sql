INSERT INTO Functions (function_id, name)
VALUES ('F1', 'Étudiants'),
       ('F2', 'Membres du BDE'),
       ('F3', 'Salariés CESI');

INSERT INTO Users (function_id, user_id, name, surname, email, password, localisation)
VALUES ('F2', 'U001', 'NDOUMBE', 'Ralph', 'ian.ndoumbe@2026.ucac-icam.com', 'password1', 'Douala'),
       ('F2', 'U002', 'KWAMOU', 'Axelle', 'axelle.kwamou@2026.ucac-icam.com', 'password2', 'Douala'),
       ('F2', 'U003', 'MATCHIM', 'Emmy', 'johanne.matchim@2026.ucac-icam.com', 'password3', 'Yaoundé'),
       ('F2', 'U004', 'DEOUASSAL', 'Exauce', 'exauce.deouassal@2026.ucac-icam.com', 'password4', 'Djamena');

INSERT INTO Admin (admin_id, name, surname, email, password)
VALUES ('A1', 'NDOUMBE', 'Ralph', 'ian.ndoumbe@2026.ucac-icam.com', 'password1'),
       ('A2', 'KWAMOU', 'Axelle', 'axelle.kwamou@2026.ucac-icam.com', 'password2'),
       ('A3', 'MATCHIM', 'Emmy', 'johanne.matchim@2026.ucac-icam.com', 'password3'),
       ('A4', 'DEOUASSAL', 'Exauce', 'exauce.deouassal@2026.ucac-icam.com', 'password4');

INSERT INTO Category (cat_id, name)
VALUES ('C01', 'Boissons'),
       ('C02', 'Produits laitiers'),
       ('C03', 'Produits frais'),
       ('C04', 'Snacks');

INSERT INTO Product (cat_id, prod_id, name, description, image, price, quantity)
VALUES ('C01', 'P001', 'Coca-Cola', 'Soda gazeux à la saveur de cola', 'coca-cola.png', '500 FCFA', '100'),
       ('C01', 'P002', 'Pepsi', 'Soda gazeux à la saveur de cola', 'pepsi.png', '500 FCFA', '150'),
       ('C02', 'P003', 'Lait Candia', 'Lait entier de vache pasteurisé', 'lait-candia.png', '1000 FCFA', '50'),
       ('C02', 'P004', 'Yaourt Danone', 'Yaourt nature sucré', 'yaourt-danone.png', '300 FCFA', '75'),
       ('C03', 'P005', 'Tomates', 'Tomates fraîches et juteuses', 'tomates.png', '500 FCFA', '200'),
       ('C03', 'P006', 'Salade', 'Mélange de laitues et légumes frais', 'salade.png', '800 FCFA', '50'),
       ('C04', 'P007', 'Chips Lay\'s', 'Chips de pommes de terre à la saveur barbecue', 'chips-lays.png', '1000 FCFA', '100'),
       ('C04', 'P008', 'Biscuits Oreo', 'Biscuits au chocolat fourrés à la crème', 'oreo.png', '500 FCFA', '120'),
       ('C01', 'P009', 'Fanta', 'Soda gazeux à la saveur d\'orange', 'fanta.png', '500 FCFA', '100'),
       ('C02', 'P010', 'Beurre Président', 'Beurre doux de qualité supérieure', 'beurre-president.png', '2000 FCFA', '30');

INSERT INTO Basket (user_id, prod_id, quantity)
VALUES ('U001', 'P001', '5'),
('U002', 'P004', '2'),
('U003', 'P007', '3'),
('U004', 'P010', '1');

INSERT INTO Activity (user_id, act_id, name, description, image, votes) VALUES
('U001', 'A001', 'Chorale', 'Pratique de chant choral', 'chorale.jpg', 0),
('U002', 'A002', 'Club de débat', 'Débattre sur des sujets variés', 'debat.jpg', 0),
('U003', 'A003', 'Club de robotique', 'Conception et programmation de robots', 'robotique.jpg', 0),
('U001', 'A004', 'Club de théâtre', 'Pratique de la comédie et de la mise en scène', 'theatre.jpg', 0);

INSERT INTO Events (act_id, dates) VALUES
('A001', '2023-05-10 11:00:00'),
('A002', '2023-05-15 14:30:00'),
('A003', '2023-05-20 09:00:00'),
('A004', '2023-05-25 16:00:00');

INSERT INTO Comments (user_id, act_id, message) VALUES
('U001', 'A001', 'Cétait une super expérience !'),
('U002', 'A001', 'Je recommande fortement cette activité.'),
('U003', 'A002', 'Les débats étaient très intéressants.'),
('U001', 'A002', 'Jai appris beaucoup de choses.'),
('U004', 'A003', 'La robotique est vraiment fascinante.'),
('U003', 'A003', 'Jaimerais en apprendre plus.'),
('U004', 'A004', 'Le théâtre est une passion pour moi.'),
('U002', 'A004', 'Les professeurs sont très professionnels.');