SELECT COUNT(*) AS 'nb_susc', ROUND(AVG(price), -1) AS 'av_susc', MOD(SUM(duration_sub), 42) AS 'ft'
FROM subscription;