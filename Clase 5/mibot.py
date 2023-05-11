import openai

# Set up your OpenAI API credentials
openai.api_key = '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'
print("ejecutando")
# Define a function to interact with the ChatGPT model
def chat_with_gpt(prompt):
    response = openai.Completion.create(
        engine='text-davinci-003',  # Specify the engine (e.g., text-davinci-003, text-davinci-002, etc.)
        prompt=prompt,
        max_tokens=50,  # Specify the maximum length of the response
        temperature=0.7,  # Controls the randomness of the output, lower values make it more focused
        n=1,  # Number of responses to generate
        stop=None,  # Specify a custom stop sequence if needed
        timeout=10  # Maximum time in seconds to wait for the API response
    )

    # Get the generated reply from the API response
    reply = response.choices[0].text.strip()
    return reply

# Example conversation
conversation = "Hello, how are you?"

while True:
    user_input = input("User: ")
    conversation += '\nUser: ' + user_input

    if user_input.lower() == 'bye':
        print("ChatGPT: Goodbye!")
        break

    response = chat_with_gpt(conversation)
    conversation += '\nChatGPT: ' + response
    print("ChatGPT:", response)
