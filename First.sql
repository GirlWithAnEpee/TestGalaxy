SELECT
  users.name,
  communities.name,
  community_members.joined_at
FROM community_members
  INNER JOIN users
    ON community_members.user_id = users.id
  INNER JOIN communities
    ON community_members.community_id = communities.id
WHERE communities.created_at >= '2013-01-01'
ORDER BY community_members.joined_at DESC