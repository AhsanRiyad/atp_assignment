######################################

DELIMITER $$
CREATE OR REPLACE PROCEDURE cart_t(IN uid INT , IN o_date DATE , IN p_method VARCHAR(20))
BEGIN
DECLARE o_no, p_id , qntity, b INT;
DECLARE cur_1 CURSOR FOR
SELECT * FROM CART WHERE user_id = UID;
SELECT MAX(order_id) INTO o_no FROM ORDER_T;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET b = 1;
OPEN cur_1;
REPEAT FETCH cur_1 INTO p_id ; 
UNTIL b=1
END REPEAT
CLOSE cur_1;
END $$



######################################


DELIMITER $$
CREATE OR REPLACE PROCEDURE cart_t(IN uid INT , IN pid INT , IN qntity INT)
BEGIN
declare counter_var INT;

SELECT count(*) into counter_var from carts where user_id = uid and product_id = pid;

if counter_var = 0
then
INSERT INTO `carts`( `product_id`, `user_id`, `quantity`) VALUES (pid , uid , qntity);
else
UPDATE `carts` SET `quantity`= quantity + qntity  WHERE user_id = uid and product_id = pid;

end if;

END $$



######################################