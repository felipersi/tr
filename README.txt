Problema um: Trens

A estrada de ferro suburbana local presta serviços de manutenção a um número de cidades em Kiwiland. Por causa de preocupações monetárias, todas as faixas são "unidirecionais". Ou seja, uma rota de Kaitaia para Invercargill não implica a existência de uma rota de Invercargill para Kaitaia. De fato, mesmo que ambas as rotas existam, elas são distintas e não são necessariamente a mesma distância!

O objetivo deste problema é ajudar a ferrovia a fornecer aos seus clientes informações sobre as rotas. Em particular, você calculará a distância ao longo de uma determinada rota, o número de rotas diferentes entre duas cidades e a rota mais curta entre duas cidades.

 

Entrada: Um gráfico direcionado em que um nó representa uma cidade e uma borda representa uma rota entre duas cidades. A ponderação da borda representa a distância entre as duas cidades. Uma determinada rota nunca aparecerá mais de uma vez e, para uma determinada rota, a cidade inicial e final não será a mesma cidade. Para a entrada de teste, as cidades são nomeadas usando as primeiras letras do alfabeto de A a D. Uma rota entre duas cidades (A a B) com uma distância de 5 é representada como AB5.

 

Saída: Para entrada de teste de 1 a 5, se não houver tal rota, envie 'NO TAIS ROTA'. Caso contrário, siga a rota como dada; não faça paradas extras! Por exemplo, o primeiro problema significa começar na cidade A, depois viajar diretamente para a cidade B (uma distância de 5) e, em seguida, diretamente para a cidade C (uma distância de 4).

A distância da rota A-B-C.
A distância da rota A-D.
A distância da rota A-D-C.
A distância da rota A-E-B-C-D.
A distância da rota A-E-D.
O número de viagens começando em C e terminando em C com um máximo de 3 paradas. Nos dados de amostra abaixo, existem duas dessas viagens: C-D-C (2 paradas). e C-E-B-C (3 paradas).
O número de viagens começando em A e terminando em C com exatamente 4 paradas. Nos dados de amostra abaixo, existem três viagens: A a C (via B, C, D); A para C (via D, C, D); e A para C (via D, E, B).
O comprimento da rota mais curta (em termos de distância para viajar) de A para C.
O comprimento da rota mais curta (em termos de distância para viajar) de B para B.
O número de rotas diferentes de C a C com uma distância inferior a 30. Nos dados da amostra, as viagens são: CDC, CEBC, CEBCDC, CDCEBC, CDEBC, CEBCEBC, CEBCEBCEBC.
Entrada de Teste:

AB5, BC4, CD8, DC8, DE6, AD5, CE2, EB3, AE7

 

Saída de teste:

Saída 1: 9

Saída 2: 5

Saída 3: 13

Saída # 4: 22

Saída # 5: NO TAIS ROTA

Saída 6: 2

Saída 7: 3

Saída 8: 9

Saída 9: 9

Saída 10: 7