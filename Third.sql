SELECT
  users.name,
  communities.name,
  permissions.name
FROM community_members
  INNER JOIN users
    ON community_members.user_id = users.id
  INNER JOIN communities
    ON community_members.community_id = communities.id
  INNER JOIN community_member_permissions
    ON users.id = community_member_permissions.member_id
  INNER JOIN permissions
    ON community_member_permissions.permission_id = permissions.id
WHERE (INSTR(LOWER(users.name), 't') > 0 OR INSTR(LOWER(permissions.name), 'article') > 0) AND LENGTH(communities.name) >= 15