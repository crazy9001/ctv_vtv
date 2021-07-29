import axios from 'axios'
import { queryString } from './util'

export default {
  /**
   * Fetch comments.
   *
   * @param  {Object} args
   * @return {Promise}
   */
  fetch: args => axios.get('/api/v1/comments?' + queryString(args)),

  /**
   * Create a new comment.
   *
   * @param  {Object} data
   * @return {Promise}
   */
  store: data => axios.post(`/api/v1/comments`, data),

  /**
   * Update the given comment.
   *
   * @param  {Number} cid
   * @param  {Object} data
   * @return {Promise}
   */
  update: (cid, data) => axios.patch(`/api/v1/comments/${cid}`, data),

  /**
   * Delete the given comment.
   *
   * @param  {Number} cid
   * @return {Promise}
   */
  destroy: cid => axios.delete(`/api/v1/comments/${cid}`),

  /**
   * Upvote the given comment.
   *
   * @param  {Number} cid
   * @return {Promise}
   */
  upvote: cid => axios.post(`/api/v1/comments/${cid}/upvote`),

  /**
   * Downvote the given comment.
   *
   * @param  {Number} cid
   * @return {Promise}
   */
  downvote: cid => axios.post(`/api/v1/comments/${cid}/downvote`),

  /**
   * Remove the vote for the given comment.
   *
   * @param  {Number} cid
   * @return {Promise}
   */
  removeVote: cid => axios.delete(`/api/v1/comments/${cid}/remove-vote`),

  /**
   * Report the given comment.
   *
   * @param  {Number} cid
   * @return {Promise}
   */
  report: cid => axios.put(`/api/v1/comments/${cid}/report`),

  /**
   * Render the comment as HTML.
   *
   * @param  {String} content
   * @return {Promise}
   */
  preview: content => axios.post('/api/v1/comments/preview', { content })
}
