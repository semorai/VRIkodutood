
//* Ülesanne 1 *//


create table loomaaed558 (
id integer auto_increment primary key, 
nimi varchar(64), 
vanus integer, 
liik varchar(64), 
puur integer);


//* Ülesanne 2 *//



insert into loomaaed558 (nimi, vanus, liik, puur) values 
('Vant', 12, 'elevant', 1),
('Kaisu', 5, 'karu', 2),
('Sarvik', 3, 'Nina', 3),
('Pikk kael', 12, 'elevant', 1),
('Sarvik', 9, 'metskits', 3),
('Smoking', 15, 'pingviin', 4);

//* Ülesanne 3 *//


select nimi,puur from loomaaed558 where puur=1;
select nimi,puur from loomaaed558 where puur=3;



//*vanima ja noorima looma vanused *//
select min(vanus),max(vanus) from loomaaed558;

//* puuri number ja selle elanike arv *//
select count(puur),puur from loomaaed558 group by puur asc;

//* suurendan vanuseid 1-aasta võrra *//
update loomaaed558 set vanus=vanus+1; 