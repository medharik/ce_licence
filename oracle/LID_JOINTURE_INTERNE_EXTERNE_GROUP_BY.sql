-- select e.* from  employees e,departments d ,locations l, countries c 
-- where e.department_id=d.department_id and d.location_id=l.location_id and l.country_id=c.country_id
-- and lower(c.country_name)='france'
-- and e.SALARY between (select min_salary from JOBS where job_id='IT_PROG') 
-- and (select max_salary from JOBS where job_id='IT_PROG')


-- les employees travaillant dans le meme pays que Jhon Chen
-- select e.* , l.country_id from employees  e
-- join departments d on e.department_id =d.department_id 
-- join locations l on d.location_id=l.location_id

-- where  country_id = ( select ll.country_id from employees  ee
-- join departments dd on ee.department_id =dd.department_id 
-- join locations ll on dd.location_id=ll.location_id
-- where  ee.first_name ='John' and ee.last_name ='Chen'  )
-- select e.employee_id, e.first_name , e.last_name , d.department_name
-- from employees e   left   join departments d  on e.department_id=d.department_id
-- order by e.employee_id desc
-- on veut connaitre la liste des departements n'ayant pas encore d'employes et se trouvant en Italy (distict)
-- fonction de groupe (agregation) : max(salary) , min(salary), avg(salary), sum(salary) , count(*)

-- select count(*) , max(salary) , min(salary), avg(salary), sum(salary) from employees
select department_name , count(*) , max(salary) , min(salary) , sum(salary) from employees  e join departments d   on e.department_id =d.department_id
group by department_name

