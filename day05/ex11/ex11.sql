SELECT UPPER(user_card.last_name) AS 'NAME', user_card.first_name, subscription.price
FROM user_card, subscription, member
WHERE subscription.price>42 
AND member.id_sub=subscription.id_sub 
AND member.id_user_card=user_card.id_user
ORDER BY user_card.last_name, user_card.first_name;