use rwanda;

SELECT
  table2.districtname,
  table2.sectorcount
FROM
  (
    SELECT
      d.districtname,
      count(sectorname) AS sectorcount
    FROM
      districts d
      INNER JOIN sectors s ON s.districtid = d.districtid
    GROUP BY
      d.districtname
  ) table2
where
  table2.sectorcount =(
    select
      max(table1.sectorcount)
    from
      (
        SELECT
          d.districtname,
          count(sectorname) AS sectorcount
        FROM
          districts d
          INNER JOIN sectors s ON s.districtid = d.districtid
        GROUP BY
          d.districtname
      ) table1
  );