SELECT
  communities.id,
  communities.name,
  permissions.name,
  COUNT(community_members.user_id) AS expr1
FROM communities,
     community_member_permissions
       INNER JOIN community_members
         ON community_member_permissions.member_id = community_members.user_id
       INNER JOIN permissions
         ON community_member_permissions.permission_id = permissions.id
GROUP BY communities.id,
         communities.name,
         permissions.name
ORDER BY communities.id DESC, expr1