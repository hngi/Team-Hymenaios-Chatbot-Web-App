import os, random, google

os.environ["GOOGLE_APPLICATION_CREDENTIALS"] = "credidentials/small-talk-oclgfa-09b21a2abecc.json"

import dialogflow_v2 as dialogflow
dialogflow_session_client = dialogflow.SessionsClient()
PROJECT_ID = "small-talk-oclgfa"

def detect_intent_from_text(text, session_id, language_code='en'):
	session = dialogflow_session_client.session_path(PROJECT_ID, session_id)
	text_input = dialogflow.types.TextInput(text=text, language_code=language_code)
	query_input = dialogflow.types.QueryInput(text=text_input)
	response = dialogflow_session_client.detect_intent(session=session, query_input=query_input)
	return response.query_result

def get_reply(query, session_id):
	try:
		response = detect_intent_from_text(query, session_id)
		return response.fulfillment_text
	except google.api_core.exceptions.ServiceUnavailable:
		return "ServiceUnavailable"

class SessionID(object):
	"""SessionID for keeping track of chat sessions"""
	def __init__(self):
		super(SessionID, self).__init__()

	def generate(self):
		id_ = str(random.randint(1, 800000))+str(self.__hash__())
		return int(id_)

		

# def get_reply(query, *args):
# 	return f"you said '{query}'"