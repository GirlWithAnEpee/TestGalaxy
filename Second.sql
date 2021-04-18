SELECT
  communities.id,
  communities.name,
  permissions.name,
  COUNT(community_members.user_id) AS AmountWhoCan
FROM community_members
  INNER JOIN communities
    ON community_members.community_id = communities.id
  INNER JOIN community_member_permissions
    ON community_members.user_id = community_member_permissions.member_id
  INNER JOIN permissions
    ON community_member_permissions.permission_id = permissions.id
GROUP BY communities.id,
         communities.name,
         permissions.name,
         community_members.community_id,
         permissions.id
HAVING AmountWhoCan >= 5
ORDER BY communities.id DESC, AmountWhoCan